<link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" media="all">
<div class="pupils">
    <div class="header">
        <span>ETudiant</span>
    </div>
    <div class="body">
        <table>

            <thead>
                <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->matricule }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->firstname }}</td>
                        <td><a href="/ajouter_note/{{ $pupil->user_as_pupil_id }}" class="add-mark">Ajouter une note</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="add_block anime-down">
            <div class="add_head">
                <span>Ajouter une note</span>
                <button class="close p_close">
                    <i class="fa fa-window-close"></i>
                </button>
            </div>
            <form class="form">
                <div class="block">
                    <div class="form-group">
                        <input type="text" name="matter" list="matters" placeholder="Matière">
                        <i class="fa fa-book"></i>
                        <datalist id="matters">
                            @foreach ($matiere as $key => $value)
                                @foreach ($matiere as $k => $v)
                                <option value="{{$v}}">{{$v}}</option>
                                @endforeach
                            @endforeach
                        </datalist>
                    </div>
                    <div class="form-group">
                        <input type="number" name="mark" id="mark" min="0" max="20" placeholder="Note sur 20">
                        <i class="fa fa-check-circle"></i>
                    </div>
                    <div class="form-group">
                        <input type="text" name="semester" list="semesters"  placeholder="Semestre">
                        <i class="fa fa-clock"></i>
                        <datalist id="semesters">
                            <option value="Semestre 1"></option>
                            <option value="Semestre 2"></option>
                        </datalist>
                    </div>
                </div>
                <button type="submit">Enregistrer</button>
            </form>
            <div id="note_registering_response"></div>
        </div>
    </div>
</div>
