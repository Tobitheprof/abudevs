from django.db import models
from django.contrib.auth import get_user_model
from autoslug import AutoSlugField
User=get_user_model()


CATEGORIES = (
    ('STEM', 'STEM'),
    ('Cloud and AI', 'Cloud and AI'), 
    ('ML and AI', 'ML and AI'),
    ('Design', 'Design'),
    ('App Development', 'App Development'),
    ('Project Management', 'Project Management'),
    ('Data Analysis', 'Data Analysis'),

)

CHOICES = (
    ('publish', 'publish'),
    ('draft', 'draft'),
)

ANSWERED = (
    ('YES', 'YES'),
    ('NO', 'NO'),
)


class Profile(models.Model):
    owner = models.ForeignKey(User, on_delete=models.SET_NULL, null=True)
    phone_number = models.CharField(max_length=300)
    occupation = models.CharField(max_length=300, null=True)
    user_id = models.IntegerField(null=True)
    address = models.CharField(max_length=300)
    nationality = models.CharField(max_length=300)
    about_me = models.TextField()
    join_reason = models.TextField()


    def __str__(self):
        return self.owner.username

class TeamMember(models.Model):
    name = models.CharField(max_length=100)
    role = models.CharField(max_length=255)
    bio = models.TextField(max_length=500)
    profile_pic = models.ImageField(upload_to="Team Pics")
    twitter_link = models.URLField()
    facebook_link = models.URLField()
    linkedin_link = models.URLField()
    email = models.EmailField()

    def __str__(self):
        return self.name


class Post(models.Model):
    title = models.CharField(max_length=300, help_text="Enter a catchy title here", unique=True)
    featured_image = models.ImageField(upload_to="post_images")
    author = models.ForeignKey(User, on_delete=models.SET_NULL, null=True)
    slug = AutoSlugField(populate_from="title", editable=False)
    date_posted = models.DateField(auto_now_add=True)
    body = models.TextField()
    status = models.CharField(max_length=300, choices=CHOICES)

    def __str__(self):
        return self.title

class Contact(models.Model):
    name = models.CharField(max_length=300)
    email = models.EmailField()
    subject = models.CharField(max_length=300)
    answered = models.CharField(max_length=300, choices=ANSWERED, null=True, default='NO')
    message = models.TextField()
    

    def __str__(self):
        return self.name

class Course(models.Model):
    title = models.CharField(max_length=100, unique=True)
    slug = AutoSlugField(populate_from="title", unique=True)
    featured_image = models.ImageField(upload_to="Course Images")
    author = models.CharField(max_length=100)
    number_of_lectures = models.CharField(max_length=300)
    category = models.CharField(choices=CATEGORIES, max_length=300)
    description = models.TextField()

    def __str__(self):
        return self.title

class Lecture(models.Model):
    title = models.CharField(max_length=300)
    video_link = models.CharField(max_length=900,null=False)
    description = models.TextField(null=True)
    serial_number = models.IntegerField(null=True)
    course = models.ForeignKey(Course, on_delete = models.CASCADE, null=False)

    def __str__(self):
        return self.title

class Events(models.Model):
    title = models.CharField(max_length=300)
    description = models.TextField()
    featured_image = models.ImageField()
    date = models.DateTimeField()

    def __str__(self):
        return self.title

class Challenge(models.Model):
    title = models.CharField(max_length=300)
    featured_image = models.ImageField(upload_to="post_images")
    author = models.ForeignKey(User, on_delete=models.SET_NULL, null=True)
    slug = AutoSlugField(populate_from="title", editable=False)
    date_posted = models.DateField(auto_now_add=True)
    body = models.TextField()
    status = models.CharField(max_length=300, choices=CHOICES)

    def __str__(self):
        return self.title


        

# Create your models here.
