from django.contrib import admin
from .models import *
from django_summernote.admin import SummernoteModelAdmin

class PostAdmin(SummernoteModelAdmin):
    summernote_fields = ('body',)

class PostDisplay(SummernoteModelAdmin, admin.ModelAdmin):
    list_display = ['title', 'status', 'date_posted']
    summernote_fields = ('body',)

class ContactDisplay(admin.ModelAdmin):
    list_display = ['name', 'email', 'subject']


admin.site.register(Post, PostDisplay)
admin.site.register(Contact, ContactDisplay)
admin.site.register(Profile)

# Register your models here.
