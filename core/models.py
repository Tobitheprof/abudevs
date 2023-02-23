from django.db import models
from django.contrib.auth import get_user_model
from autoslug import AutoSlugField
User=get_user_model()


CHOICES = (
    ('publish', 'publish'),
    ('draft', 'draft'),
)


class Profile(models.Model):
    owner = models.ForeignKey(User, on_delete=models.SET_NULL, null=True)
    phone_number = models.CharField(max_length=300)
    user_id = models.IntegerField(null=True)
    address = models.CharField(max_length=300)
    nationality = models.CharField(max_length=300)
    about_me = models.TextField()
    join_reason = models.TextField()


    def __str__(self):
        return self.owner.username


class Post(models.Model):
    title = models.CharField(max_length=300, help_text="Enter a catchy title here", unique=True)
    fetured_image = models.ImageField(upload_to="post_images")
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
    message = models.TextField()
    

    def __str__(self):
        return self.name

        

# Create your models here.
