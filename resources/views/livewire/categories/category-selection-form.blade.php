<div class="col-sm-4">
    <div class="mb-3">
        <label class="form-label">انتخاب چندتایی</label>
        <select wire:model="categories" multiple>
            <option value="TX">ایران</option>
            <option value="WY">برزیل</option>
            <option value="NY">ترکیه</option>
            <option value="FL">کانادا</option>
            <option value="KN">انگلستان</option>
            <option value="HW">استرالیا</option>
        </select>
        @dump(var_dump($categories))
        هیچی گفتم شاید اصلا تو اون ریخته نمیشه اطلاعات برا همین کلا به لایو وایر اطلاعات نمیده
        میدونید میخوام اصلا این کادر چند انتخابیو بردارم یدونه سادشم باشه کافیه برا رزومس پروژه
        <span class="select2 select2-container select2-container--default invisible" dir="rtl" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                    <ul class="select2-selection__rendered">
                        <li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li>
                    </ul>
                </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </div>
</div>
{{-- <input type="text" class="invisible" value="{{ $categories }}"> --}}


<!-- Col -->
{{-- @script()
<script>
    $(document).ready(function () {
        $(".js-example-basic-multiple").on('change', function () {
            let data = $(this).val();
            $wire.set('$categories',data);
        });
    });
</script>
@endscript --}}