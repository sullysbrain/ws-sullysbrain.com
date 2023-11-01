from django.db import models

# Create your models here.
class Post(models.Model):
    title = models.CharField(max_length=200, default="Title")
    author = models.CharField(max_length=200, default="Author")
    body = models.TextField()

    def __str__(self):
        return self.title
