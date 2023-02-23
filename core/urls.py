from django.urls import path
from . import views

urlpatterns = [
    path('', views.index, name="index"),
    path('about/', views.about, name="about"),
    path('contact/', views.contact, name="contact"),
    path('blog/', views.blog, name="blog"),
    path('blog/<str:slug>/', views.blog_det, name="blog_det"),
    path('login', views.login, name="login"),
    path('register', views.register, name="register"),

]
