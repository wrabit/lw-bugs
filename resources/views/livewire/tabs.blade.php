<div x-data="{
        step: @entangle('step'),
    }">
    <ul>
        <li><a href="#" @click.prevent="step = 1">1</a></li>
        <li><a href="#" @click.prevent="step = 2">2</a></li>
        <li><a href="#" @click.prevent="step = 3">3</a></li>
    </ul>
    
    <div>
        <div x-show="step == 1">Step 1</div>
        <div x-show="step == 2">Step 2</div>
        <div x-show="step == 3">Step 3</div>
    </div>
</div>
