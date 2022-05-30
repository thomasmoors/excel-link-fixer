# reason

When you add a link in Excel and click it, Excel will make first a HEAD request and after that a GET. If one of those return a status code other than 200 it will try to cache this target.
However in some cases this is not desirable: When I add issues in GitLab, the request will be unauthenticated, GitLab wil redirect the Excel request to the login page. This small piece of code is a workaround for this problem.
It will return 200 when the user-agent contains "office" (which will be in the request made by Excel), but will redirect you to the intended page in every other browser.


needs PHP 8

hosted on http://excel.gratisapi.nl

You should use it as follows:

```
http://excel.gratisapi.nl/?url=https://google.com
```

where google.com is the target site

![image](https://user-images.githubusercontent.com/486765/121019269-8fba2280-c79f-11eb-8265-c09ec0d61ffb.png)
