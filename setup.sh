echo "making .env"
echo DB_LOCATION=sqlite:///woodworking.db > .env

echo "setting up venv"
python -m venv .venv
act
python -m pip install --upgrade pip

echo "installing packages"
pip install Flask python-dotenv Flask-SQLAlchemy