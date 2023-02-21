# Generated by Django 4.0 on 2023-02-20 15:08

import autoslug.fields
from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Post',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('title', models.CharField(help_text='Enter a catchy title here', max_length=300, unique=True)),
                ('fetured_image', models.ImageField(upload_to='post_images')),
                ('slug', autoslug.fields.AutoSlugField(editable=False, populate_from='title')),
                ('date_posted', models.DateField(auto_now_add=True)),
                ('body', models.TextField()),
                ('status', models.CharField(choices=[('publish', 'publish'), ('draft', 'draft')], max_length=300)),
            ],
        ),
    ]
