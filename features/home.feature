Feature: Login
    Scenario: Log in as Alan
        Given I am logged in as "Alan"
        And I visit the path "/"
        Then I should see the text "Laravel"