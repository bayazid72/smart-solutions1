<x-layouts.app title="Contact">

<h1>Contact</h1>
    <p>Heb je vragen of wil je met ons in contact komen? Vul het onderstaande formulier in of stuur ons een e-mail op <a href="mailto:info@smart-solutions.nl">info@smart-solutions.nl</a>. We proberen zo snel mogelijk te reageren!</p>

    <form>
        <label for="name">Naam:</label>
        <input type="text" id="name" name="name">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <label for="subject">Onderwerp:</label>
        <input type="text" id="subject" name="subject">

        <label for="message">Tekst:</label>
        <textarea id="message" name="message"></textarea>

        <button type="submit">Verzenden</button>
    </form>

</x-layouts.app>
