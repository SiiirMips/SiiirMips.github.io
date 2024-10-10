document.addEventListener('DOMContentLoaded', function() {
    const greetings = [
        "Growth Starts with a Single Idea",
        "Together, We Cultivate Innovation",
        "Dream Bold, Innovate Fearlessly",
        "Your Ideas Shape Our Future",
        "Embrace Challenges, Unlock Potential",
        "Innovation Begins with You",
        "Ideas Ignite the Spark of Growth",
        "Every Idea Matters, Every Voice Counts",
        "Think Big, Start Small, Act Now",
        "Inspire Change, Create Impact",
        "Innovate Today, Lead Tomorrow",
        "Fueling Progress with Creativity",
        "Collaboration Drives Innovation",
        "Explore Possibilities, Achieve Growth",
        "Great Minds, Greater Ideas"
    ];

    const randomGreeting = greetings[Math.floor(Math.random() * greetings.length)];
    document.getElementById('greeting').textContent = randomGreeting;

    const content = document.getElementById('content');

});