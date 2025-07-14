from . import db
from datetime import datetime

class Product(db.Model):
    __tablename__ = 'products'

    id = db.Column(db.Integer, primary_key=True)
    name = db.Column(db.String(120), nullable=False)
    description = db.Column(db.Text)
    price = db.Column(db.Numeric(10, 2), nullable=False)
    quantity = db.Column(db.Integer, default=0)
    is_active = db.Column(db.Boolean, default=True)
    created_at = db.Column(db.DateTime, default=datetime.now())
    updated_at = db.Column(db.DateTime, default=datetime.now(), onupdate=datetime.now())
    image = db.Column(db.String(255))  # image URL or filename?

    def __repr__(self):
        return f"<Product {self.id}: {self.name}>"


class Review(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    author = db.Column(db.String(100))
    content = db.Column(db.Text)
    rating = db.Column(db.Integer)
    created_at = db.Column(db.DateTime, default=db.func.now())

    def __repr__(self):
        return f"<Review {self.id}: {self.rating}>"


