<div {{ $attributes->merge(['class' => 'relative overflow-x-auto custom-scrollbar']) }}>
    <table class="w-full text-left rtl:text-right" id="pricelistTable">
        <thead>
        <tr class="border-y-1 border-storex-inactive-grey text-center">
            <th class="text-left">
                <div class="flex items-center">
                    @lang('Modelis')
                </div>
            </th>
            <th class="length sortable" data-column="1" data-type="numeric">
                <button class="flex items-center justify-center hover:text-storex-red">
                    <span>@lang('Garums') (m)</span>
                    <span class="sort-arrow ml-1 text-gray-400">▲</span>
                </button>
            </th>
            <th class="width sortable" data-column="2" data-type="numeric">
                <button class="flex items-center justify-center hover:text-storex-red">
                    <span>@lang('Platums') (m)</span>
                    <span class="sort-arrow ml-1 text-gray-400">▲</span>
                </button>
            </th>
            <th class="height sortable" data-column="3" data-type="numeric">
                <button class="flex items-center justify-center hover:text-storex-red">
                    <span>@lang('Augstums') (m)</span>
                    <span class="sort-arrow ml-1 text-gray-400">▲</span>
                </button>
            </th>
            <th class="space-between-arches sortable" data-column="4" data-type="numeric">
                <button class="flex items-center justify-center hover:text-storex-red">
                    <span>@lang('Attālums starp arkām') (m)</span>
                    <span class="sort-arrow ml-1 text-gray-400">▲</span>
                </button>
            </th>
            <th class="gate-size">
                <div class="flex items-center">
                    <span>@lang('Vārtu izmērs PxA') (m)</span>
                </div>
            </th>
            <th class="area sortable" data-column="6" data-type="numeric">
                <button class="flex items-center justify-center hover:text-storex-red">
                    <span>@lang('Platība') (m<sup>2</sup>)</span>
                    <span class="sort-arrow ml-1 text-gray-400">▲</span>
                </button>
            </th>
            <th class="pvc-tent sortable" data-column="7" data-type="numeric">
                <button class="flex items-center justify-center hover:text-storex-red">
                    <span>@lang('PVC materiāls') (g/m<sup>2</sup>)</span>
                    <span class="sort-arrow ml-1 text-gray-400">▲</span>
                </button>
            </th>
            <th class="frame-tube">@lang('Rāmja caurule')</th>
            <th class="attachment">@lang('Tehniskais rasējums')</th>
            <th class="text-storex-red sortable" data-column="10" data-type="price">
                <button class="flex items-center justify-center hover:text-storex-red">
                    <span>@lang('Cena bez PVN')</span>
                    <span class="sort-arrow ml-1 text-gray-400">▲</span>
                </button>
            </th>
        </tr>
        </thead>
        <tbody>
        {{ $slot }}
        </tbody>
    </table>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const table = document.getElementById('pricelistTable');
        const tbody = table.querySelector('tbody');
        const sortableHeaders = table.querySelectorAll('th.sortable');

        let currentSort = {column: -1, direction: 'asc'};

        sortableHeaders.forEach((header, index) => {
            const button = header.querySelector('button');
            if (button) {
                button.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();

                    const column = parseInt(header.dataset.column);
                    const type = header.dataset.type || 'text';

                    // Toggle direction if same column
                    if (currentSort.column === column) {
                        currentSort.direction = currentSort.direction === 'asc' ? 'desc' : 'asc';
                    } else {
                        currentSort.direction = 'asc';
                        currentSort.column = column;
                    }

                    sortTable(column, currentSort.direction, type);
                    updateSortArrows(header, currentSort.direction);
                });
            }
        });

        function sortTable(columnIndex, direction, type) {
            const rows = Array.from(tbody.querySelectorAll('tr'));

            rows.sort((a, b) => {
                const aVal = a.cells[columnIndex] ? a.cells[columnIndex].textContent.trim() : '';
                const bVal = b.cells[columnIndex] ? b.cells[columnIndex].textContent.trim() : '';

                let comparison = 0;

                if (type === 'numeric') {
                    const aNum = parseFloat(aVal.replace(',', '.')) || 0;
                    const bNum = parseFloat(bVal.replace(',', '.')) || 0;
                    comparison = aNum - bNum;
                } else if (type === 'price') {
                    const aPrice = parseFloat(aVal.replace(/[^\d.,]/g, '').replace(',', '.')) || 0;
                    const bPrice = parseFloat(bVal.replace(/[^\d.,]/g, '').replace(',', '.')) || 0;
                    comparison = aPrice - bPrice;
                } else {
                    comparison = aVal.localeCompare(bVal);
                }

                return direction === 'asc' ? comparison : -comparison;
            });

            // Re-append sorted rows
            rows.forEach(row => tbody.appendChild(row));
        }

        function updateSortArrows(activeHeader, direction) {
            // Reset all arrows to inactive state
            sortableHeaders.forEach(header => {
                const arrow = header.querySelector('.sort-arrow');
                if (arrow) {
                    arrow.className = 'sort-arrow ml-1 text-gray-400';
                    arrow.textContent = '▲';
                }
            });

            // Update active column arrow
            const activeArrow = activeHeader.querySelector('.sort-arrow');
            if (activeArrow) {
                activeArrow.className = 'sort-arrow ml-1 text-storex-red';
                activeArrow.textContent = direction === 'asc' ? '▲' : '▼';
            }
        }
    });
</script>
