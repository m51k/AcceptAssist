from django.shortcuts import render
from rest_framework.views import APIView
from rest_framework.response import Response
from rest_framework import status
from acceptance_predictor.predict import randomForestRegressor

# Create your views here.
class PredictAcceptance(APIView):
    def post(self, request):
        gre = request.data.get('r_grescore')
        toefl = request.data.get('r_toeflscore')
        sop = request.data.get('r_sop')
        lor = request.data.get('r_lor')
        cgpa = request.data.get('r_cgpa')
        research = request.data.get('r_research')
        rating = request.data.get('r_rating')
        
        prediction = randomForestRegressor(gre, toefl, rating, sop, lor, cgpa, research)

        return Response(prediction, status=status.HTTP_200_OK)
