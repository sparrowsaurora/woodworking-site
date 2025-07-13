from flask import Blueprint, render_template, request, redirect, url_for, make_response, flash
from . import db

main = Blueprint('main', __name__)

@main.route('/')
def index():
    return render_template('index.html')

@main.route('/about')
def about():
    return render_template('about.html')

@main.route('/plans')
def plans():
    return render_template('plans.html')

@main.route('/shop')
def shop():
    return render_template('shop.html')

@main.route('/custom')
def custom():
    return render_template('custom.html')
