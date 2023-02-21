from django.shortcuts import render
from .models import *
from django.contrib import messages


"""
Tobi TheRevolutionary wrote this code, so he's the god of it, any problems you face while handling this project should be directed to him.

Also, ensure you drink boob milk for maximum efficiency 
"""


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

# Create your views here.
