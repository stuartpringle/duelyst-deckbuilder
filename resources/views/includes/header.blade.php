<div class="navbar">
   <div class="navbar-inner">
       <a id="logo" href="/">Single Malt</a>
       <ul class="nav">
           <li><a href="/">Home</a></li>
           <li><a href="/contact">Contact</a></li>
       </ul>
   </div>
</div>

    <div x-data="{ open: false }">
        <button @click="open = true">Show More...</button>
 
        <ul x-show="open" @click.away="open = false">
            <li><button wire:click="archive">Archive</button></li>
            <li><button wire:click="delete">Delete</button></li>
        </ul>
    </div>