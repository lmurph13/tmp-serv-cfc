<x-app-layout>
  <x-slot name="header">
    <x-header first="About" second="Us" />
  </x-slot>

  <div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="pb-4">
            <img class="rounded-md rotate-180" src="{{ config('app.asset_url') }}/img/logoHorizontal.png" />
        </div>
        <div class="overflow-hidden shadow-sm sm:rounded-lg text-gray-100">
          <p class="pt-4">
            Welcome to Energia <span class="text-primary">Ventosa</span>,
            where we turn gusts into greatness! Founded with a mission to make
            wind energy a breeze for everyone, our team of passionate
            professionals is dedicated to harnessing the power of the wind and
            converting it into clean, sustainable energy. We're not just a
            company; we're a movement - a whirlwind of innovation and
            dedication to a greener future. And yes, we know what you're
            thinking: our meetings are always a breath of fresh air!
          </p>

          <p class="pt-4">
            At Energia <span class="text-primary">Ventosa</span>, we
            believe that wind power should be as easy as a walk in the park -
            a windy park, that is. Our cutting-edge technology and
            state-of-the-art turbines are designed to capture even the
            slightest zephyrs and transform them into reliable, renewable
            energy. Whether it's a gentle breeze or a powerful gale, we're
            here to ensure that every puff of wind is put to good use. And
            don't worry, our engineers have never been blown away by the
            competition!
          </p>

          <p class="pt-4">
            Our team is comprised of wind enthusiasts, eco-warriors, and pun
            aficionados, all working together to create a cleaner, greener
            planet. We pride ourselves on our commitment to sustainability,
            innovation, and a sense of humor that keeps things light - even
            when the wind isn't. Join us on our journey as we continue to push
            the boundaries of what's possible with wind energy. After all, at
            Energia <span class="text-primary">Ventosa</span>, we're
            experts at making the world spin in the right direction!
          </p>
        </div>
    </div>
</div>
</x-app-layout>
