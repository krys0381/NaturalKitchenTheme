import { Selector } from "testcafe";

fixture `Webshop test`
    .page ("https://hotel-cms.site/kitchen-garden/");

test("Test1", async t => {
    await t
        .setTestSpeed(0.7)    
        .navigateTo('https://hotel-cms.site/kitchen-garden/')
        .click("body > div.container.my-5 > div > div.col-8 > ul > li:nth-child(4) > a")
        .typeText("#comment", "I love bananas!")
        .click("#submit")
        .scrollIntoView("body > div.container.my-5 > div > div.col-9 > div.card.comment")
        .expect(Selector("body > div.container.my-5 > div.row > div.col-9 > div.card.comment > div > p").innerText).eql("I love bananas!")
})

test("Test2", async t => {
    await t
        .setTestSpeed(0.7)
        .navigateTo('https://hotel-cms.site/kitchen-garden/wp-login.php')
        .typeText("#user_login", "testcafe")
        .typeText("#user_pass", "testcafe123")
        .pressKey("enter")
        .click("#menu-comments > a > div.wp-menu-name")
        .click("#cb-select-all-1")
        .click("#bulk-action-selector-top")
        .click("#bulk-action-selector-top > option:nth-child(5)")
        .click("#doaction")
        .expect(Selector("#the-comment-list > tr > td").innerText).eql("No comments found.")
})
