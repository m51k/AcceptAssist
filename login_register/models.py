from django.db import models

# Create your models here.
class User(models.Model):
    username = models.CharField(max_length=50, unique=True)
    name = models.CharField(max_length=255)
    email = models.EmailField(unique=True)
    phone_number = models.CharField(max_length=11, null=True)
    country = models.CharField(max_length=60, null=True)
    password = models.CharField(max_length=128)