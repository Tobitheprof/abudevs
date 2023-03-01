from django.contrib import admin
from .models import *
from django_summernote.admin import SummernoteModelAdmin

class LectureAdmin(admin.TabularInline):
    model=Lecture

class PostAdmin(SummernoteModelAdmin):
    summernote_fields = ('body',)

class PostDisplay(SummernoteModelAdmin, admin.ModelAdmin):
    list_display = ['title', 'status', 'date_posted']
    summernote_fields = ('body',)

class ContactDisplay(admin.ModelAdmin):
    list_display = ['name', 'email', 'subject', 'answered']

class CourseAdmin(admin.ModelAdmin):
    inlines = [LectureAdmin]
    list_display = ['title', 'author', 'number_of_lectures'] 
    
    def title(self, course):
        return f'{course.title}'

    def author(self, course):
        return f'{course.author}'
        
    def number_of_lectures(self, course):
        return f'{course.number_of_lectures}'

class ChallengeAdmin(SummernoteModelAdmin, admin.ModelAdmin):
    list_display = ['title', 'status', 'date_posted']
    summernote_fields = ('body',)


admin.site.register(Post, PostDisplay)
admin.site.register(Contact, ContactDisplay)
admin.site.register(Profile)
admin.site.register(Course, CourseAdmin)
admin.site.register(Lecture)
admin.site.register(Events)
admin.site.register(Challenge, ChallengeAdmin)
admin.site.register(TeamMember)
# Register your models here.
