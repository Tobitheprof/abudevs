from django.urls import path
from . import views

urlpatterns = [

    # -------------------- Auth URLs ------------------ #
    path('login/', views.login, name="login"),
    path('register/', views.register, name="register"),
    path('home/', views.home, name="home"),
    path('edit-profile/', views.edit_profile, name="edit-profile"),
    path('logout/', views.logout, name="logout"),
    path('events/', views.events, name="events"),
    

    path('courses/', views.courses, name="courses"),
    path('courses/stem/', views.stem, name="stem"),
    path('courses/cloud-and-ai/', views.cloud_ai, name="cloud-and-ai"),
    path('courses/ml-and-ai/', views.ml_ai, name="ml-and-ai"),
    path('courses/design/', views.design, name="design"),
    path('courses/app-dev/', views.app_dev, name="app-dev"),
    path('courses/project-management/', views.proj_man, name="project-management"),
    path('courses/data-anal', views.data_anal, name="data-analysis"),
    path('courses/<str:slug>/', views.det, name="det"),
    # -------------------- Auth URLs End -------------- #



    #--------------------- Unauth URLs ---------------- #
    path('', views.index, name="index"),
    path('about/', views.about, name="about"),
    path('contact/', views.contact, name="contact"),
    path('blog/', views.blog, name="blog"),
    path('blog/<str:slug>/', views.blog_det, name="blog_det"),
    #--------------------- Unauth URLs end ------------ #
   

]
