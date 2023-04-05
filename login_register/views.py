from django.shortcuts import redirect, render
from django.http import HttpResponse
from django.contrib import messages
from django.db import IntegrityError
from .models import User
# Create your views here.
class Register:
    def register(request):
        if request.method == "POST":
            userName = request.POST.get('username')
            fullName = request.POST.get('name')
            email = request.POST.get('email')
            phoneNo = request.POST.get('phoneNo')
            country = request.POST.get('country')
            password = request.POST.get('password')
            rePassword = request.POST.get('rePassword')
            
            # check if passwords match
            if password != rePassword:
                messages.error(request, "Passwords do not match.")
                render(request, "login_register/register.html") 
            
            # handle duplicate accounts
            try:
                user = User.objects.create(username=userName, name=fullName, email=email, phone_number=phoneNo, country=country, password=password)
                user.save()
                messages.success(request, "Success")
                return redirect("login/")
            except IntegrityError:
                messages.error(request, "An account with this Username or Email already exists.")
            
        return render(request, "login_register/register.html")

class Login:
    def login(request):
        return render(request, "login_register/login.html")