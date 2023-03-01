from django.shortcuts import render, redirect
from .models import *
from django.contrib import messages
from django.contrib.auth.models import User, auth
from django.template.loader import render_to_string, get_template
from django.core.mail import EmailMessage
from django.contrib.auth.decorators import *


"""
Tobi TheRevolutionary wrote this code, so he's the god of it, any problems you face while handling this project should be directed to him.

Also, ensure you drink boob milk for maximum efficiency.
TIme Spent on entire project: 72 Hours
Total time allocated: 96 hours
"""

#------------------------ Authenticated Views Start -------------------------#

def login(request):
    user = request.user

    if user.is_authenticated:
        return redirect(home)

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

@login_required
def home(request):
    context = {
        'title' : 'Dashboard'
    }
    return render(request, 'home.html', context)

def register(request):
    user = request.user

    if user.is_authenticated:
        return redirect(home)
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
            return redirect('edit-profile')#Rediects to specified page once condition is met
        else:
            messages.info(request, "Passwords do not match")
            return redirect(register)

    else:
        return render(request, 'register.html', context)

@login_required
def edit_profile(request):
    user_profile = Profile.objects.get(owner=request.user)
    if request.method == "POST":
            address = request.POST['address']
            phone_number = request.POST['phone']
            nationality = request.POST['nationality']
            about_me = request.POST['desc']
            join_reason = request.POST['join_reason']
            occupation = request.POST['occupation']

            user_profile.address = address
            user_profile.occupation = occupation
            user_profile.phone_number = phone_number
            user_profile.nationality = nationality
            user_profile.join_reason = join_reason
            user_profile.about_me = about_me
            user_profile.save()
            return redirect("home")
    context = {
        'title' : 'Edit Profile',
        'user_profile' : user_profile,
    }
    return render(request, 'edit-profile.html', context)

@login_required
def logout(request):
    auth.logout(request)
    return redirect('login')

@login_required
def courses(request):
    course = Course.objects.all()[:9]
    context = {
        "title" : "Courses",
        "course" : course
    }
    return render(request, 'courses.html', context)

@login_required
def stem(request):
    course = Course.objects.filter(category="STEM")
    context = {
        'course' : course,
        'title' : "STEM Courses"
    }
    return render(request, 'category.html', context)


@login_required
def cloud_ai(request):
    course = Course.objects.filter(category="Cloud and AI")
    context = {
        'course' : course,
        'title' : "Cloud and AI Courses"
    }
    return render(request, 'category.html', context)

@login_required
def ml_ai(request):
    course = Course.objects.filter(category="ML and AI")
    context = {
        'course' : course,
        'title' : "ML and AI Courses"
    }
    return render(request, 'category.html', context)

@login_required
def design(request):
    course = Course.objects.filter(category="Design")
    context = {
        'course' : course,
        'title' : "Design Courses"
    }
    return render(request, 'category.html', context)

@login_required
def app_dev(request):
    course = Course.objects.filter(category="App Development")
    context = {
        'course' : course,
        'title' : "App Development Courses"
    }
    return render(request, 'category.html', context)

@login_required
def proj_man(request):
    course = Course.objects.filter(category="Project Management")
    context = {
        'course' : course,
        'title' : "Project Management Courses"
    }
    return render(request, 'category.html', context)

@login_required
def data_anal(request): #we both know you saw the anal here XD
    course = Course.objects.filter(category="Data Analysis")
    context = {
        'course' : course,
        'title' : "Data Analysis Courses"
    }
    return render(request, 'category.html', context)

def det(request, slug):
    course = Course.objects.get(slug = slug)
    serial_number = request.GET.get('lecture')
    lectures = course.lecture_set.all().order_by('serial_number')


    if serial_number is None:
        serial_number = 1
    lecture = Lecture.objects.get(serial_number = serial_number, course = course)



    context = {
        'course' : course,
        'lecture' : lecture,
        'lectures' : lectures,
        'title' : course

    }
    return render(request, 'det.html', context)

def events(request):
    events = Events.objects.all().order_by('date')
    context = {
        'events' : events,
        'title' : 'Events'
    }
    return render(request, 'events.html', context)
@login_required
def challenge(request):
    challenge = Challenge.objects.filter(status="publish")
    context = {
        'challenge' : challenge,
        'title' : "Challenges"
    }
    return render(request, 'challenge.html', context)

@login_required
def challenge_det(request, slug):
    challenge = Challenge.objects.get(slug=slug)
    context = {
        'challenge' : challenge,
        'title' : challenge
    }
    return render(request, 'challenge_det.html', context)

#------------------------ Authenticated Views End --------------------------#





#-------------------------- Unauthenticated Views Start ------------------------#

def index(request):
    context = {
        'title' : 'Homepage',
    }
    return render(request, 'index.html', context)

def about(request):
    team = TeamMember.objects.all()
    context = {
        'title' : 'About',
        'team' : team,
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
    post = Post.objects.filter(status="publish").order_by('id')
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
