<div class="d-flex flex-row gap-1 text-nowrap align-items-center">
    <span>Sort by:</span>
    <select class="form-select border-0" aria-label="Sort select" name="sort_by">
        {{ $slot }}
    </select>
    <label class="btn btn-secondary" for="sort-checkbox" id="checkboxLabel">
        <input class="btn-check" type="checkbox" id="sort-checkbox" name="desc_sort" @checked(old('desc_sort'))>
        <div id="unchecked">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-arrow-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5" />
            </svg>
        </div>
        <div id="checked" hidden>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-arrow-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1" />
            </svg>
        </div>
    </label>
</div>
