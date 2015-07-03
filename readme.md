# ADR; Action, Domain, Responder

Following the pattern described by [Paul Jones](http://pmjones.io/adr/)

Organizes a single user interface interaction between a web client and a web application into three distinct roles.

The pattern, like MVC, uses other patterns to build a complete web environment; HTTP Messaging and Routing for example.

## ADR Components

ADR is split into main components as a design pattern, and then my implementation has sub-components, as any implementation would.

### Action

Is the logic that connects the Domain and Responder. It uses the request input to interact with the Domain, and passes the Domain output to the Responder.

#### Input Validation

Actions would be expected to perform some kind of Input Validation to return the application to the Client early, if any data does not validate.

### Domain

Is the logic to manipulate the domain. The Domain represents:

- Session
- Application State
- Environment Data
- Persistence

Each Domain object used by an Action can utilise many other Domain objects as needed; There is no limit to the complexity or hierarchy to a Domain.


### Responder

Is the logic to build an HTTP response or response description. It deals with:

- Body content
- Templates
- Views
- Headers and cookies
- Status codes
- And so on...


## HTTP Process

- The Server receives an HTTP Request
- The Application builds itself up
    - The Injector is bootstrapped
    - Using PSR-7, the Server builds the relevant Request and Response objects
- The Server runs a Middleware Queue, affected by the Request
    - The Queue can return the Response early to short-circuit the ADR system
    - The Queue can modify the Request
- Router attempts to match Request URI to a Route
    - Route is found and triggers a Route specific Middleware Queue
    - The last item in the Queue is the Route Action, Domain, Responder set
- The Action inspects the Request and validates any Input (GET, POST)
    - The Action instantiates the Domain object and gets a Payload response
    - The Action instantiates the Responder. The Responder processes a Response whether a Payload has data or not.