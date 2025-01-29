<section>
    @php
        $platforms = App\Models\LearningPath::PLATFORMS;
        $currentPlatform = request('platform') ?? array_key_first($platforms);
    @endphp

    <div class="flex flex-col justify-center gap-12 py-4 md:px-40">
        <h1 class="font-bold text-4xl mx-auto text-black border-b-2 border-primary-900 pb-2">Alur Belajar</h1>

        <div class="flex flex-col gap-4">
            <form method="GET" action="{{ url()->current() }}">
                <div class="flex flex-row gap-2 items-center">
                    <label for="platform" class="block text-sm font-medium text-black">Pilih Platform: </label>

                    <select name="platform" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-primary-900 focus:border-primary-900 block p-2.5" onchange="this.form.submit()">
                        @foreach ($platforms as $keyPlatform => $platform)
                            <option value="{{ $keyPlatform }}" {{ $currentPlatform == $keyPlatform ? 'selected' : '' }}>
                                {{ $platform }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </form>

            @foreach ($learningPathCategories as $keyLearningPathCategory => $learningPathCategory)
                <div data-accordion="collapse" class="">
                    @php
                        $noCategory = $keyLearningPathCategory + 1;
                    @endphp

                    <h2 id="accordion-collapse-heading-{{ $noCategory }}">
                        <button type="button" class="flex rounded-sm items-center justify-between w-full p-4 font-medium text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100 gap-3" data-accordion-target="#accordion-collapse-body-{{ $noCategory }}" aria-expanded="false" aria-controls="accordion-collapse-body-{{ $noCategory }}">
                        <span>{{ $noCategory }}. {{ $learningPathCategory->name }}</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                        </button>
                    </h2>

                    <div id="accordion-collapse-body-{{ $noCategory }}" class="hidden" aria-labelledby="accordion-collapse-heading-{{ $noCategory }}">
                        <div class="p-4 border border-gray-200 py-0">
                            <ul class="w-full divide-y divide-gray-200">
                                @foreach ($learningPathCategory->learningPaths as $keyLearningPath => $learningPath)
                                    @php
                                        $noLearningPath = $keyLearningPath + 1;
                                    @endphp

                                    <li class="py-4">
                                        <div class="font-noto-sans w-full flex items-center justify-between space-x-4">
                                            <p class="text-sm text-black font-normal truncate">
                                                {{ $noCategory }}.{{ $noLearningPath }}. {{ $learningPath->title }}
                                            </p>

                                            <a href="{{ @$learningPath->links[$currentPlatform] }}" target="_blank" class="font-medium text-sm text-primary hover:underline">
                                                Lihat
                                            </a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


                {{-- <div class="flex flex-col items-start justify-start gap-4 w-full">
                    <h4 class="text-base">{{ $keyLearningPathCategory + 1 .'. '.$learningPathCategory->name }}</h4>

                    <div class="flex flex-wrap shadow-md sm:rounded-lg w-full">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3 w-1/6">
                                        #
                                    </th>
                                    <th scope="col" class="px-6 py-3 w-4/6">
                                        Judul
                                    </th>
                                    <th scope="col" class="px-6 py-3 w-1/6">
                                        Link
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($learningPathCategory->learningPaths as $keyLearningPath => $learningPath)
                                    <tr class="odd:bg-white even:bg-gray-50  border-gray-200">
                                        <td scope="row" class="px-6 py-4 w-1/6">
                                            {{ $keyLearningPathCategory + 1 . '.' . $keyLearningPath + 1 }}
                                        </td>
                                        <td class="px-6 py-4 w-4/6">
                                            <div class="truncate max-w-xs">
                                                {{ $learningPath->title }}easfeastsretyesrdsfestsety
                                            </div>
                                        </td>
                                        <td class="px-6 py-4" class="w-1/6">
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> --}}
    </div>
</section>

