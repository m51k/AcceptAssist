from django.shortcuts import redirect, render
from django.http import HttpResponse
from django.contrib import messages
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
            
            user = User.objects.create(username=userName, name=fullName, email=email, phone_number=phoneNo, country=country, password=password)
            
            user.save()
            
            messages.success(request, "Success")
            
            return redirect("login/")
        return render(request, "login_register/register.html")

class Login:
    def login(request):
        return render(request, "login_register/login.html")