from django.test import TestCase, Client
from rest_framework import status
from rest_framework.test import APITestCase, APIClient
import json
# Create your tests here.
import os

# get the absolute path to the file
file_path = os.path.abspath('acceptance_predictor/admit.csv')

# use the absolute path to open the file
with open(file_path) as f:
    # do something with the file
    pass

class PredictAcceptanceTestCase(APITestCase):
    def setUp(self):
        self.client = APIClient()
    
    def testValidInputs(self):
        case = {"r_grescore":317, "r_toeflscore":107, "r_sop":3.5, "r_lor":3, "r_cgpa":8.28, "r_research":0, "r_rating":2}
        url = '/api/acceptance-prediction/'
        response = self.client.post(url, data=case, format='json')
        self.assertEqual(response.status_code, status.HTTP_200_OK)
    
    def testMissingInput(self):
        case = {"r_grescore":317, "r_toeflscore":107, "r_sop":None, "r_lor":3, "r_cgpa":8.28, "r_research":0, "r_rating":2}
        url = '/api/acceptance-prediction/'
        with self.assertRaises(ValueError):
            self.client.post(url, data=case, format='json')
    
    def testAllMissingInputs(self):
        case = {"r_grescore":None, "r_toeflscore":None, "r_sop":None, "r_lor":None, "r_cgpa":None, "r_research":None, "r_rating":None}
        url = '/api/acceptance-prediction/'
        with self.assertRaises(ValueError):
            self.client.post(url, data=case, format='json')
    
    def testInalidInput(self):
        case = {"r_grescore":317, "r_toeflscore":"a", "r_sop":3.5, "r_lor":3, "r_cgpa":8.28, "r_research":0, "r_rating":2}
        url = '/api/acceptance-prediction/'
        with self.assertRaises(ValueError):
            self.client.post(url, data=case, format='json')   
    
    def testAllInvalidInputs(self):
        case = {"r_grescore":"a", "r_toeflscore":"b", "r_sop":"c", "r_lor":"d", "r_cgpa":"e", "r_research":"f", "r_rating":"g"}
        url = '/api/acceptance-prediction/'
        with self.assertRaises(ValueError):
            self.client.post(url, data=case, format='json')     
    
