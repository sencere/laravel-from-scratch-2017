          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
                @foreach($archives as $stats)
                    <li>
                        <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
                             {{ \Carbon\Carbon::createFromFormat('m/d', $stats['month'] . '/01')->monthName . ' ' . $stats['year'] }}
                        </a> 
                    </li>
                @endforeach
            </ol>
          </div>

         <div class="sidebar-module">
            <h4>Tags</h4>
            <ol class="list-unstyled">
                @foreach($tags as $tag)
                    <li>
                        <a href="/posts/tags/{{ $tag }}">
                             {{ $tag }}
                        </a>
                    </li>
                @endforeach
            </ol>
          </div>

