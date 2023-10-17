from django.db import models

# Create your models here.
class Post(models.Model):
    title = models.CharField(max_length=100, default="Title")
    body = models.TextField()

    def __str__(self):
        return self.title[:50]
