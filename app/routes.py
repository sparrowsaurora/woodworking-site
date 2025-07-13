from flask import Blueprint, render_template, request, redirect, url_for, make_response, flash
from .models import Invoice
from . import db

main = Blueprint('main', __name__)

@main.route('/')
def index():
    return render_template('index.html')

