from django.test import TestCase

# Create your tests here.
import os

# get the absolute path to the file
file_path = os.path.abspath('acceptance_predictor/admit.csv')

# use the absolute path to open the file
with open(file_path) as f:
    # do something with the file
    pass
