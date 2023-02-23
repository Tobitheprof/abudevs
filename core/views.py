from django.shortcuts import render, redirect
from .models import *
from django.contrib import messages
from django.contrib.auth.models import User, auth
from django.template.loader import render_to_string, get_template
from django.core.mail import EmailMessage


"""
Tobi TheRevolutionary wrote this code, so he's the god of it, any problems you face while handling this project should be directed to him.

Also, ensure you drink boob milk for maximum efficiency 
"""

#------------------------ Authenticated Views Start -------------------------#

def login(request):
    context = {
        'title' : 'Login',
    }
    if request.method == 'POST':
        username = request.POST['username'] #Requesting Username
        password = request.POST['password'] #Requesting Password
    
        user = auth.authenticate(username=username, password=password)

        if user is not None: #Cheking If User Exists in the database
            auth.login(request, user) # Logs in User
            return redirect('home') # Redirects to home view
        else:
            messages.info(request, 'Invalid Username or Password') #Conditional Checking if credentials are correct
            return redirect('login')#Redirects to login if invalid

    else:
        return render(request, 'login.html', context)

def register(request):
    context = {
        'title' : 'Sign Up',
    }
    if request.method == 'POST':
        #Requesting POST data
        first_name = request.POST['first_name']
        last_name = request.POST['last_name']
        username = request.POST['username']
        email = request.POST['email']
        password = request.POST['password']
        password2 = request.POST['password2']
        #End of POST data request

        #Condition is executed if both passwords are the same
        if password == password2:
            if User.objects.filter(email=email).exists(): #Checking databse for existing data
                messages.info(request, "This email is already in use")#Returns Error Message
                return redirect(register)
            elif User.objects.filter(username=username).exists():
                messages.info(request, "Username Taken")
                return redirect('register')
            #Else condition executed if the above conditions are not fulfilled    
            else:
                ctx = {
                    'user' : username
                }
                message = get_template('mail.html').render(ctx)
                msg = EmailMessage(
                    'Welcome to ABUDevs',
                    message,
                    'The ABUDevs Team',
                    [email],
                )
                msg.content_subtype ="html"# Main content is now text/html
                msg.send()
                user = User.objects.create_user(username=username, email=email, password=password, first_name=first_name, last_name=last_name )
                user.save()
                user_login = auth.authenticate(username=username, password=password)
                auth.login(request, user_login)#Logs in USER



            #Create user model and redirect to edit-profile
            user_model = User.objects.get(username=username)
            new_profile = Profile.objects.create(owner=user_model, user_id=user_model.id)
            new_profile.save()
            return redirect('register')#Rediects to specified page once condition is met
        else:
            messages.info(request, "Passwords do not match")
            return redirect(register)

    else:
        return render(request, 'register.html', context)


#------------------------ Authenticated Views End --------------------------#





#-------------------------- Unauthenticated Views Start ------------------------#

def index(request):
    context = {
        'title' : 'Homepage',
    }
    return render(request, 'index.html', context)

def about(request):
    context = {
        'title' : 'About'
    }
    return render(request, 'about.html', context)

def contact(request):
    context = {
            'title' : 'Contact'
    }
    if request.method == "POST":
        name = request.POST['name']
        email = request.POST['email']
        subject = request.POST['subject']
        message = request.POST['message']

        new_message = Contact.objects.create(name=name, email=email, subject=subject, message=message)
        messages.success(request, 'We have received your message and our support team will get to you as soon as possible')
        new_message.save()

    return render(request, 'contact.html', context)

def blog(request):
    post = Post.objects.filter(status="publish")
    context = {
        'post' : post,
        'title' : 'Blog'

    }
    return render(request, 'blog.html', context)

def blog_det(request, slug):
    post = Post.objects.get(slug=slug)

    context = {
        'post' : post,
        'title' : slug

    }
    return render(request, 'blog_det.html', context)

#-------------------------- Unauthenticated Views End ------------------------#


# Create your views here.
