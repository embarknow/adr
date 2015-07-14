# ADR; Action, Domain, Responder

Following the pattern described by [Paul Jones](http://pmjones.io/adr/).

Some of the wording in this file may be direct or altered duplicate, not in way of plagiarism, but in reference. All kudos for ADR is with Paul.

## Preamble

Organizes a single user interface interaction between a web client and a web application into three distinct roles.

The pattern, like MVC, uses other patterns to build a complete web environment; HTTP Messaging and Routing for example.

If you're not fully versed on ADR, then you must go and read Paul's [excellent article on the pattern](http://pmjones.io/adr/) before you dive in here.

Embark ADR is trying to take a purist approach to the pattern, and as other implementations are using tried and tested methods, refining to a very specific methodology, this purist approach will remain purist.

> Why, when others are proving certain concepts?

While it is agreed here that the routes some other implementations are going downmake certain sense, Embark ADR wants to remain super simple and obvious.

### Actions as an example

After discussion with Paul, reference to re-using Actions repetitively has led him to make a default Action set ([Radar](https://github.com/radarphp/Radar.Adr) through to [Spark](https://github.com/sparkphp/adr) through to [Arbiter](https://github.com/arbiterphp/Arbiter.Arbiter)), Embark believes in tightly bound interfaces and use of traits, without defining a strict method like Spark's global action handler. This doesn't mean that similar default functionality can be built into implementations, however the underlying pattern in Embark ADR will remain completely divorced from this.

Call it obsessive, it is.

## ADR Components

As explained in Paul's article, ADR is split into three main components as a design pattern. Embark ADR, like others, has two other components to make it a functioning pattern.

### Action

Is the logic that connects the Domain and Responder. It uses the http request input to interact with the Domain, and passes the Domain output to the Responder. This is in the form of the `Embark\Adr\ActionInterface`.

Tried and tested implementations have taken the path of having one core Action which is set at a global level for re-use, whereas Embark ADR would expect that re-use means passing an instance of the same interface implementor in each time it is required. In both cases there may only be one actual implementation, but it is used slightly differently. Embark's pattern means that it is still completely open to interpretation.

#### Input Validation

Actions would be expected to perform some kind of Input Validation to return the application to the Client early, if any data does not validate. With Embark ADR, this comes in the form of the `Embark\Adr\HttpInputInterface`.

##### A helpful note on implementation

Input validation should generally use an **Reject known bad** strategy, meaning that anything known to be bad data should either be dropped from the data sent to the domain, or return an error to the client.

### Domain

Is the logic to manipulate the domain. The Domain represents:

- Session
- Application State
- Environment Data
- Persistence

Each Domain object instantiated by an Action is there to be a bridge between your real domain and the ADR pattern. Embark ADR is completely unopinionated as to how this works. Good domains have a plentiful selection of service objects to do the legwork between


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