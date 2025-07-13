from dotenv import load_dotenv
import os

load_dotenv()  # Load from .env

class Config:
    SQLALCHEMY_DATABASE_URI = os.getenv('DB_LOCATION')
    SQLALCHEMY_TRACK_MODIFICATIONS = False
