@administrator_login
Feature: Sign in to the store
  In order to manage the directory
  As a Visitor
  I want to be able to log in to the directory

  Background:
    Given there is an administrator "admin@example.com" identified by "semi"

  @ui
  Scenario: Sign in with user and password
    Given I want to log in
    When I specify the username as "admin@example.com"
    And I specify the password as "semi"
    And I log in
    Then I should be logged in