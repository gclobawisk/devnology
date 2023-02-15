from flask import Flask, request, render_template, redirect, jsonify
import mysql.connector
from mysql.connector import errorcode

db_connection = mysql.connector.connect(host='devnology99.mysql.dbaas.com.br', database='devnology99',
                                            user='devnology99', password='Devnology99@')
cursor = db_connection.cursor(dictionary=True)
cursor.execute("SELECT * FROM links")
links = cursor.fetchall()

# CRIANDO O APP
app = Flask(__name__)
app.config['JSON_AS_ASCII'] = False
@app.route('/')
def index():
    return render_template('index.html')

@app.route('/api')
def api():
    return render_template('api.html')

@app.route('/crawler')
def crawler():
    import bs4 as bs
    import urllib.request
    from urllib.error import HTTPError
    import re

    db_connection = mysql.connector.connect(host='devnology99.mysql.dbaas.com.br', database='devnology99',
                                            user='devnology99', password='Devnology99@')
    cursor = db_connection.cursor(dictionary=True)

    fim = False
    i = 1
    # Condição de parada caso não haja mais páginas para rastrear
    while fim == False:
        try:
            source = urllib.request.urlopen(f"https://devgo.com.br/archive/{i}").read()
            soup = bs.BeautifulSoup(source)
            all_div = soup.findAll("div", attrs={"class": "css-1mp7n32"})

            for div in all_div:
                li_titulo = div.h1.a.text
                li_url = div.h1.a['href']

                # INSERE OS DADOS NO BANCO DE DADOS
                sql = f"INSERT IGNORE INTO links (li_titulo, li_url, li_blog_id) VALUES ('{li_titulo}', '{li_url}', {1})"
                cursor.execute(sql)
                db_connection.commit()

            i = i + 1

        #caso não haja url o erro é tratado e o loop é encerrado
        except HTTPError as e:
            fim = True
            return render_template('sucesso.html')


# Consultar todos os links
@app.route('/links')
def getLinks():
    return jsonify(links)

# Consultar link por id'
@app.route('/links/<int:id>', methods=['GET'])
def obter_link_por_id(id):
    for link in links:
        if link.get('li_id') == id:
            return jsonify(link)

    if TypeError:
        return ('ID inválido')


#EDITAR
@app.route('/links/<int:id>', methods=['PUT'])
def editar_link(id):
    link_alterado = request.get_json()
    for i,link in enumerate(links):
        if link.get("li_id") == id:
            links[i].update(link_alterado)
            return jsonify(links[i])
    if TypeError:
        return ('ID inválido')

@app.route('/links', methods=['POST'])
def incluir_link():
    novo_link = request.get_json()
    links.append(novo_link)
    return jsonify(links)

@app.route('/links/<int:id>', methods=['DELETE'])
def excluir_link(id):
    for i, link in enumerate(links):
        if link.get("li_id") == id:
            del links[i]
            return jsonify(links)
    if TypeError:
        return ('ID inválido')



if __name__ == '__main__':
    app.run(port=8080, host='0.0.0.0', debug=True,
            threaded=True)

