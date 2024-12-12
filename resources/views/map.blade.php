<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="flex flex-col gap-2 container mx-auto py-10">
        {{-- @foreach ($folders as $folder)
            <div class="rounded-lg p-4 flex flex-col gap-3 border border-neutral-200 shadow-lg">
                <a class="text-lg font-semibold">{{$folder->name}}</a>
                <ul class="flex flex-row flex-wrap gap-x-4 gap-y-3 bg-neutral-100 rounded-lg p-4 border border-neutral-200">
                    @foreach ($folder->children as $child)
                        <li>
                            <a href="#" class="px-2 py-1 bg-sky-200">{{$child->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach --}}

        @foreach ($folders as $navmenu)
            <a class="text-xl font-bold">{{$navmenu->name}}</a>
            @if ($navmenu->children)
                @foreach ($navmenu->children as $section)
                    <a class="ms-8 text-lg font-medium">{{$section->name}}</a>
                    @if ($section->children)
                        @foreach ($section->children as $subsection)
                            <a class="ms-16">{{$subsection->name}}</a>
                        @endforeach
                    @endif
                @endforeach
            @else
                
            @endif
        @endforeach
    </div>
</body>
</html>