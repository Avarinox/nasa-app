from flask import Flask, request, jsonify, make_response
from flask_sqlalchemy import SQLAlchemy
from flask_cors import CORS
from os import environ

app = Flask(__name__)
CORS(app)  # Enable CORS for all routes

#create a test route
@app.route('/test', methods=['GET'])
def test():
  return make_response('Test python.', 200)
