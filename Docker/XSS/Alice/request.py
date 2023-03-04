import requests_html
import time
import asyncio
import requests







# Fill in your details here to be posted to the login form.
payload = {
    'username': 'admin',
    'password': 'G8/iO<N#5?hAe94',
    'login' : 'true'
}

# Use 'with' to ensure the session context is closed after use.
while True:
    with requests_html.HTMLSession() as s:
        r =s.get('http://MyForum/index.php')
        r.html.render(keep_page=True)
        l = asyncio.get_event_loop()
        cookies = l.run_until_complete(r.html.page.cookies())
        cookies = cookies[0]
        
        cookies = {cookies['name']: cookies['value']}
        print('I am the cookie',cookies)
        p = requests.post('http://MyForum/login.php', data=payload,cookies=cookies)
        
        # An authorised request.
        end = False
        while( not end):
            r = s.get('http://MyForum/index.php',cookies=cookies)
            print(r.text)
            r.html.render(keep_page=True)
            l = asyncio.get_event_loop()
            cookies = l.run_until_complete(r.html.page.cookies())
            cookies = cookies[0]
            cookies = {cookies['name']: cookies['value']}
            print("here come the cookieeesss",cookies )
            print("#################################") 




            r = requests.get('http://MyForum/admin.php',cookies=cookies)
            print("#################################")
            print(r.text)
            
            if "réponse" not in r.text:
                end = True
            time.sleep(20)
        
            

