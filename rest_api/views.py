from django.shortcuts import render
from rest_framework.views import APIView
from rest_framework.response import Response
from rest_framework import status
from rest_api.predict import randomForestRegressor

# Create your views here.
class PredictAcceptance(APIView):
    def post(self, request):
        gre = request.POST.get('r_grescore')
        toefl = request.POST.get('r_toeflscore')
        sop = request.POST.get('r_sop')
        lor = request.POST.get('r_lor')
        cgpa = request.POST.get('r_cgpa')
        research = request.POST.get('r_research')
        rating = request.POST.get('r_rating')
        
        prediction = randomForestRegressor(gre, toefl, rating, sop, lor, cgpa, research)

        return Response(prediction[0], status=status.HTTP_200_OK)
