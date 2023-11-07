# pages/urls.py
from django.urls import path 
from .views import (
    BlogListView, 
    BlogDetailView, 
    BlogCreateView,
    BlogUpdateview,
)

urlpatterns = [
    path("post/new/", BlogCreateView.as_view(), name="post_new"), 
    path("post/<int:pk>/", BlogDetailView.as_view(), name="post_detail"),
    path("post/<int:pk>/edit/", BlogUpdateview.as_view(), name="post_edit"),
    path("", BlogListView.as_view(), name="home"),
]
