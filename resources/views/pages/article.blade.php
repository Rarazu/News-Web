@extends('layouts.app')

@section('content')
<section class="bg-[#f7f5f1] py-16">
    <div class="max-w-3xl mx-auto px-6">

        <!-- Breadcrumb -->
        <p class="text-sm text-gray-500 mb-6">
            Home / <span class="text-gray-700">Article Detail</span>
        </p>

        <!-- Title -->
        <h1 class="text-4xl font-serif font-semibold leading-snug mb-6">
            Suffering with lack of responsibility?
        </h1>

        <!-- Meta -->
        <div class="flex items-center gap-4 text-sm text-gray-500 mb-10">
            <div class="flex items-center gap-2">
                <img src="https://i.pravatar.cc/40"
                     class="w-8 h-8 rounded-full" alt="">
                <div>
                    <p class="font-medium text-gray-700">John Staddon, Ph.D.</p>
                    <p class="text-xs">Adaptive Behavior</p>
                </div>
            </div>
            <span>•</span>
            <span>March 22, 2022</span>
            <span>•</span>
            <span>4 Min Read</span>
        </div>

        <!-- Image -->
        <img src="https://picsum.photos/800/500"
             class="rounded-xl mb-12" alt="Article Image">

        <!-- Content -->
        <article class="prose prose-lg max-w-none text-gray-700">
            <h3>What is Gaslighting?</h3>
            <p>
                If you are suffering with a lack of responsibility, here's how to
                choose a different path.
            </p>

            <p>
                Mental health issues, and why are they so common?
                Mental health issues are on the rise with statistics showing
                that 1 in 4 people in the UK suffer with at least one mental
                health condition.
            </p>

            <p>
                In the UK alone, there are currently around 20 million people
                that experience difficulties with mental illness. Since the
                start of the COVID-19 pandemic, the number of people suffering
                has increased significantly.
            </p>

            <h3>Suffering with Lack of Responsibility?</h3>
            <p>
                Lockdowns, self-isolation, quarantine, and not being able to
                experience everyday social interactions have contributed
                significantly to this increase.
            </p>
        </article>

    </div>
</section>
@endsection
