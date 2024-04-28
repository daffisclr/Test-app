<div class="row">
    @foreach ($questions as $question)
        @if ($question->step == $step)
            <div class="{{ $question->type == 'textarea' ? '' : 'col-md-6' }} col-12">
                <div class="form-group">
                    <label>{{ $question->question_label }} :</label>
                    @if ($question->type == 'text' or $question->type == 'email')
                        <input type="{{ $question->type }}" class="form-control" id="{{ $question->input_name }}"
                            name="{{ $question->input_name }}" placeholder="Input {{ $question->question_label }}" />
                    @elseif ($question->type == 'select')
                        <select id="{{ $question->input_name }}" name="{{ $question->input_name }}" class="form-control">
                            <option value="">Please Select One</option>
                        </select>
                    @elseif ($question->type == 'date')
                        <input id="{{ $question->input_name }}" name="{{ $question->input_name }}" type="text"
                            class="form-control date-picker" placeholder="Select Date" />
                    @elseif ($question->type == 'time')
                        <input id="{{ $question->input_name }}" name="{{ $question->input_name }}" type="text"
                            class="form-control time-picker" placeholder="Select Time" />
                    @elseif ($question->type == 'textarea')
                        <textarea id="{{ $question->input_name }}" name="{{ $question->input_name }}" class="form-control"
                            placeholder="Input {{ $question->question_label }}"></textarea>
                    @endif
                </div>
            </div>
        @endif
    @endforeach
</div>
