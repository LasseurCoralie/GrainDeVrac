import styled from 'styled-components';
import theme from '../../../theme/theme';

const PlanningStyled = styled.div`
  margin : 0 1em;

  table, th, td {
    border: 1px solid ${theme.colors.black};
    border-collapse: collapse;;
  }

  table.desktop-version {
    display: none;
  }

  table.desktop-version, table.mobile-version {
    margin-bottom: 3em;
  }

  table{
    width: 100%;
    margin: 2em 0;

    td, th {
      padding: 8px;
      text-align: center;
    }
    
    tr.tr-top>th, tr.tr-top>td{
      border-top: 1px solid white;
    }

    tr.tr-down>th, tr.tr-down>td{
      border-bottom: 1px solid white;
    }

    td.delivery {
      background-color: ${theme.colors.lightOrange};
      font-family: ${theme.fonts.special};
      font-weight: bold;
    }

    td.today {
      border: 2px solid ${theme.colors.orange}
    }

    td:first-child, th:first-child {
      border-left: 1px solid white;
    }

    td:last-child, th:last-child {
      border-right: 1px solid white;
    }

    td>strong.market-place {
      font-family: ${theme.fonts.special};
      font-weight: bold;
    }
  }

  @media (min-width: 1100px) {

    section#planning-zn {}
    table.desktop-version {
      max-width: 1100px;
      margin: 0 auto 3em;
      display: table;

      tr.part-day, tr.part-day th.empty-cell {
        border-left: 1px solid white;
        border-right: 1px solid white;

        th.empty-cell {
          text-transform: uppercase;
        }
      }
    }

    table.mobile-version {
      display: none;
    }

    
  }
`;

export default PlanningStyled;