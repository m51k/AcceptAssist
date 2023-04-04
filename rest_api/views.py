from django.shortcuts import render
from rest_framework.views import APIView
from rest_framework.response import Response
from rest_framework import status
from rest_api.predict import randomForestRegressor

# Create your views here.
class PredictAcceptance(APIView):
    # def post(self, request):
    #     gre = request.data.get('r_grescore')
    #     toefl = request.data.get('r_toeflscore')
    #     sop = request.data.get('r_sop')
    #     lor = request.data.get('r_lor')
    #     cgpa = request.data.get('r_cgpa')
    #     research = request.data.get('r_research')
    #     rating = request.data.get('r_rating')
        
    #     prediction = randomForestRegressor(gre, toefl, rating, sop, lor, cgpa, research)

    #     return Response(prediction[0], status=status.HTTP_200_OK)
    def post(self, request):
        gre = 337
        toefl = 118
        sop = 4.5
        lor = 4.5
        cgpa = 9.65
        research = 1
        rating = 4
        
        prediction = randomForestRegressor(gre, toefl, rating, sop, lor, cgpa, research)

        return Response(prediction[0], status=status.HTTP_200_OK)
