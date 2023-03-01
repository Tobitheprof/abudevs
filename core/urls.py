from django.urls import path
from django.contrib.auth import views as auth_views
from . import views

urlpatterns = [

    # -------------------- Auth URLs ------------------ #
    path('login/', views.login, name="login"),
    path('register/', views.register, name="register"),
    path('home/', views.home, name="home"),
    path('edit-profile/', views.edit_profile, name="edit-profile"),
    path('logout/', views.logout, name="logout"),
    path('events/', views.events, name="events"),
    path('challenge/', views.challenge, name="challenge"),
    path('challenge/<str:slug>/', views.challenge_det, name="challenge_det"),
    

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

    #Password Reset URLs

    path('reset_password/', auth_views.PasswordResetView.as_view(template_name="password_reset.html"), name="reset_password"),
    path('reset_password_sent/', auth_views.PasswordResetDoneView.as_view(template_name="password_reset_sent.html"), name="password_reset_done"),
    path('reset/<uidb64>/<token>/', auth_views.PasswordResetConfirmView.as_view(template_name="password_reset_form.html"), name="password_reset_confirm"),
    path('reset_password_success/', auth_views.PasswordResetCompleteView.as_view(template_name="password_reset_done.html"), name="password_reset_complete"),

    #End of Password Reset URLs

   

]
