from django.shortcuts import render
from rest_framework.views import APIView
from rest_framework.response import Response

import pandas as pd
import numpy as np
from sklearn.ensemble import RandomForestRegressor
from sklearn.model_selection import train_test_split

# Create your views here.
class PredictAcceptance(APIView):
    def post(self, request, rating):
        gre = request.data.get('r_grescore')
        toefl = request.data.get('r_toeflscore')
        sop = request.data.get('r_sop')
        lor = request.data.get('r_lor')
        cgpa = request.data.get('r_cgpa')
        research = request.data.get('r_research')
        
        prediction = randomForestRegressor(gre, toefl, rating, sop, lor, cgpa, research)

        return prediction
    
def randomForestRegressor(gre, toefl, rating, sop, lor, cgpa, research):
        data = pd.read_csv('../ML/admit.csv')
        X = data.iloc[:, 1:8] # features
        y = data.iloc[:, 8] # target
        
        X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=0)
        
        regressor = RandomForestRegressor(n_estimators=100, max_depth=5)
        
        regressor.fit(X_train, y_train)
        
        prediction = regressor.predict([[gre, toefl, rating, sop, lor, cgpa, research]])
        
        return prediction
