Dashboard Frontend
==================

### Libraries Used

####[ d3.js        ]( http://d3js.org/ )
####[ jQuery       ]( http://api.jquery.com/ )
####[ Bootstrap    ]( http://twitter.github.com/bootstrap/ )
####[ Font Awesome ]( http://fortawesome.github.com/Font-Awesome/ ) 

Notes
-----

#### Frontend and PHP: 
I have kept the level of PHP frontend logic to a minimum. PHP was used mainly just to split the code into manageable chunks and keep things clean. There are a couple of places where PHP was used to dynamically generate names and apply classes and IDs for targeting in css and javascript. It should be relatively easy to replicate these elements in whatever backend / server side language we end up implementing the dashboard in. The directory structure was also designed to facilitate code clarity, and is in no way a reflection of how things may be ultimately implemented. The code and filepaths *should be* rearrangaged to fit the routing and requirements of the backend framework of choice. Most of this work should be a matter of cut and paste.

**IMPORTANT:** The only request I have is that when the frontend is integrated with the backend, the *naming conventions* for IDs and classes for HTML and SVG elements be honored. For obvious reasons, we have to preserve the names of the IDs and classes of the elements so that the css and javascript will be able to target them.

#### How the files are organized currently.
* Javascript is contained in **js** diretory
* CSS and fonts are in the **styles** directory, images are in the **images** directory
* Components shared across all pages are in the **shared** directory
* Data used for the visualization is in the **data** directory. This data may be different from what you have. Please use the data that you already have, unless otherwise instructed.
* All other directories contain content for each specific web page.

#### Jvascript & CSS
It goes without saying, but the order in which external CSS and Javascript are loaded is important. Please preserve the order. Some alterations may be necessary in the javascript to pipe the backend into the front. I have tried to limit the javascript included to purely presentatonal logic, and not functional logic. Each page loads all the commonly shared javascript and css first, and the page specific javascript and css last. The page specific js and css files are named after the page. 


Backend integration for UI components
-------------------------------------

### Alerts
The alerts have been programmed so that if there are any alerts in the #alerts-box that are not of id #no-alerts, then the alerts box and its contents will be displayed on page load. Otherwise the alerts box is hidden by default. The presentational logic is all complete. I have included some example alerts (commented out), with the corresponding styles applied. At some point in the near future we will provide you with a data layer that will feed the alerts box.

### Filter Dropdowns
The dropdowns are currently purely presenatational. The dropdown need to be wired to the backend code that will change the data feeding the dials and graphs. On the previous iteration you created the user had the click the submit button. We discussed this internally, and have decided that we prefer for the renderings to be done via ajax rather than http submissions. We realize this is more work, but it should be a little easier using the jquery ajax functions. So the data change and re-rerendering should occur when a user selects a filter (activated by onclick). The text at the top of the menu should be swapped for what the user selected. Perhaps clicking on the white portion of the drop down should restore the default text (meaning don't filer).


### Dials
Data needs to be fed into each of the dials. Currently, it is randomly assigning values. You can alter the behavior in glance.js, the updateReadings() function.

### Line Graph & Key
The graph is loading its data from glance.tsv. This should be connected to your data layer.
The clicking on the key should alter the line graph to show or hide a particular data feed (currently unimplemented).
I may do further work on the graph as we have found a [ better example to adapt ](http://bl.ocks.org/bobmonteverde/2070123). So best to work on this when that portion is redone. 


### Events
The events table is fed by a data layer (currently the Events.csv file). In the current code I have hard coded the values, as this should be rendered dynamically by the server side html output engine (whether it be php or java). The A, B, C, D, E...etc. should correspond to points rendered on the line graph (currently not implemented will be working on it).
