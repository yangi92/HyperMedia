-------------
GROUP MEMBERS
-------------
Member 1 : Yannick Giovanakis (mat:790673)
Member 2:  Mattia  Monti (mat:790796)

----------
FRAMEWORKS
----------
In our project we used Bootstrap and jQuery as frameworks.
We built our project from scratch so no templates were used.
The filter function in the 'Device' category was also written from scratch but Isotope filtering script was used as refernce model.
More details on Isotope here :http://isotope.metafizzy.co/filtering.html.

-------------------
USEFUL INFORMATIONS
-------------------
.......
1.Links
.......

Clickable links/buttons have a red border or a red font. We chose to leave the non-clickable buttons (see: no border and/or white font) in the page for design reasons.
Recap:
There are three clickable and viewable Phones in the Device category.
The are three clickable and viewable SmartLife services in the Smartlife Category. 

...............
2.Shopping Cart
...............

The ShoppingCart is a simplified simulation : no purchases can be made but all the selected elements will be shown in the shopping cart. The simulation works as follows:
1. When a user clicks on 'Buy' the buyAction.php will query the ShoppingCart database with the products name and used session id.

2. If there is already an entry for the given product AND the given session id ,then no product will be added to the database and the already existing product will be shown.

3. Otherwise a new entry in the ShoppingCart database will be made using the current session_id. 

This allows to create a session : the user can navigate through the page and return whenever he wants and still find all the selected items in his shoppingCart.

.........
3. Filter
.........

The filtering script in the 'Device' category works as follows:
1. When the user clicks on a filter button the script checks for the button's ID.
2. After the script finds the matching case it will check for the values linked to the button (usually a range).
3. The scripts then checks then if the device's corresponding value is between the given range: if it's not then the device element will be faded out (see: '.fadeOut(450)).

..........
4. Changes
..........
We tried to design our website too look as much alike as our mockup. Aside from a few design choices , we made some conceptual and logic changes:
-We decided to include the 3 social media icons in EVERY page  
 (so it's a Landmark now) instead of just at the bottom of the 
 'index' and 'contact us' pages.
-Elimination of the breadcrumbs. We added 'back' buttons where it was necessary.




